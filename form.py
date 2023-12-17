import tkinter as tk
from tkinter import messagebox
import mysql.connector
import random
import tkinter as tk
from PIL import Image, ImageTk
from tkcalendar import DateEntry
# MySQL connection
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="cocoa_more"
)

mycursor = mydb.cursor()

# Reservation System
class ReservationSystemGUI:
    def __init__(gui, root):
        gui.root = root
        gui.root.title("ระบบจอง")

        
        # Load image
        image_path = "asdqwe.jpg"
        img = Image.open(image_path)
        width = 300
        height = 100
        img = img.resize((width, height), Image.LANCZOS)
        photo = ImageTk.PhotoImage(img)

        # Create a label for the image
        image_label = tk.Label(gui.root, image=photo)
        image_label.pack()

        gui.menu_items = {
            "-": 0,
            "Iceberg Banoffee": 50.0,
            "Iceberg Black Magic": 40.0,
            "Iceberg CCM Combo": 60.0,
            "Iceberg Cocoa Cheesecake": 60.0,
            "Iceberg Blueberry Cheesecake": 60.0,
            "Iceberg Cocoa Twist": 60.0,
            "Iceberg Greentea Twist": 60.0,
            "Iceberg Snow White": 60.0,
            "IIceberg Thai-Thai": 60.0,
        }

        gui.selected_menu_items = {}

        gui.name_var = tk.StringVar()
        gui.phone_var = tk.StringVar()
        gui.num_people_var = tk.IntVar()
        gui.reservation_time_var = tk.StringVar()
        gui.menu_var = tk.StringVar()
        gui.menu_var.set(list(gui.menu_items.keys())[0])
        gui.quantity_var = tk.IntVar(value=1)
        gui.table_number_var = tk.StringVar(value=random.choice(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']))
        gui.total_sales_var = tk.DoubleVar(value=0.0)
        gui.total_revenue_var = tk.DoubleVar(value=0.0)

        gui.create_customer_info_frame()
        gui.create_menu_frame()

    def create_customer_info_frame(gui):
        frame = tk.Frame(gui.root)
        frame.pack(padx=400, pady=30)

        tk.Label(frame, text="ชื่อ(ที่ใช้จอง):").grid(row=0, column=0, sticky="w")
        tk.Entry(frame, textvariable=gui.name_var).grid(row=0, column=1)

        tk.Label(frame, text="เบอร์โทรติดต่อ:").grid(row=1, column=0, sticky="w")
        tk.Entry(frame, textvariable=gui.phone_var).grid(row=1, column=1)

        tk.Label(frame, text="ระบุเวลาที่จะเข้าร้าน:").grid(row=2, column=0, sticky="w")
        tk.Entry(frame, textvariable=gui.reservation_time_var).grid(row=2, column=1)

        tk.Label(frame, text="จำนวนคนในกลุ่ม:").grid(row=3, column=0, sticky="w")
        tk.Entry(frame, textvariable=gui.num_people_var, validate="key",
                 validatecommand=(frame.register(gui.validate_num_people), '%P')).grid(row=3, column=1)

        tk.Label(frame, text="โต๊ะที่:").grid(row=4, column=0, sticky="w")
        tk.Entry(frame, textvariable=gui.table_number_var).grid(row=4, column=1)

        tk.Label(frame, text="เมนูอาหาร").grid(row=5, column=0, sticky="w")
        tk.OptionMenu(frame, gui.menu_var, *gui.menu_items.keys()).grid(row=5, column=1)

        tk.Label(frame, text="จำนวนที่สั่ง").grid(row=6, column=0, sticky="w")
        tk.Entry(frame, textvariable=gui.quantity_var).grid(row=6, column=1)



        tk.Label(frame, text="ยอดรวมจากการขายอาหาร:").grid(row=8, column=0, sticky="w")
        tk.Label(frame, textvariable=gui.total_sales_var).grid(row=8, column=1)

        tk.Label(frame, text="ยอดรวมจากค่าจองโต๊ะ: 50 บาท").grid(row=9, column=0, sticky="w")

        tk.Label(frame, text="สรุปยอดทั้งหมด:").grid(row=10, column=0, sticky="w")
        tk.Label(frame, textvariable=gui.total_revenue_var).grid(row=10, column=1)

    def submit_customer_info(gui):






        sql_customer_info ="INSERT INTO `table_detail_table`( `t_name`, `t_tel`, `t_date`, `t_customer`, `menu`, `table_number`, `status`, `amoutoffood`, `total_sale`, `total_revenue`) VALUES (%s ,%s  ,%s ,%s,%s,%s ,%s,%s,%s,%s)"
        val_customer_info =(gui.name_var.get(),gui.phone_var.get(),gui.reservation_time_var.get(),gui.num_people_var.get(),gui.menu_var.get(),gui.table_number_var.get(),"จองแล้ว",gui.quantity_var.get(),gui.total_sales_var.get(),gui.total_revenue_var.get())
        mycursor.execute(sql_customer_info,val_customer_info)
        mydb.commit()

        messagebox.showinfo("บันทึกข้อมูลลูกค้าเสร็จสิ้น",
                            f"ชื่อ: {gui.name_var.get()}\nเบอร์โทร: {gui.phone_var.get()}\n"
                            f"จำนวนคน: {gui.num_people_var.get()}\nเวลา: {gui.reservation_time_var.get()}\n"
                            f"โต๊ะที่: {gui.table_number_var.get()}")
        
        gui.clear_all_fields()

    def validate_num_people(gui, value):
        return value.isdigit()

    def clear_all_fields(gui):
        gui.name_var.set("")
        gui.phone_var.set("")
        gui.num_people_var.set(0)
        gui.reservation_time_var.set("")
        gui.menu_var.set("")
        gui.quantity_var.set(1)
        gui.table_number_var.set(random.choice(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']))

    def create_menu_frame(gui):
        frame = tk.Frame(gui.root)
        frame.pack(padx=10, pady=10)

        tk.Label(frame, text="เมนูที่สั่ง").grid(row=0, column=0, columnspan=2, pady=10)

        gui.menu_listbox = tk.Listbox(frame, selectmode=tk.MULTIPLE, width=50)
        gui.menu_listbox.grid(row=1, column=0, columnspan=5, pady=5)
        gui.update_menu_listbox()

        tk.Button(frame, text="เพิ่มเมนู", command=gui.add_menu).grid(row=2, column=0, pady=5)
        tk.Button(frame, text="ลดเมนู", command=gui.remove_menu).grid(row=2, column=1, pady=5)

        tk.Label(frame, text="จำนวนที่สั่ง").grid(row=3, column=0, pady=5)
        gui.quantity_label = tk.Label(frame, text="1")
        gui.quantity_label.grid(row=3, column=1, pady=5)


        tk.Button(frame, text="ยืนยันการจอง", command=gui.submit_customer_info).grid(row=5, column=0, columnspan=2, pady=10)

    def add_menu(gui):
        selected_menu = gui.menu_var.get()
        if selected_menu != "-":
            if selected_menu in gui.selected_menu_items:
                gui.selected_menu_items[selected_menu]["quantity"] += 1
            else:
                gui.selected_menu_items[selected_menu] = {"quantity": 1, "price": gui.menu_items[selected_menu]}
            # print(gui.selected_menu_items)
            gui.update_menu_listbox()
            gui.update_total_price()

    def remove_menu(gui):
        selected_menu = gui.menu_var.get()
        if selected_menu != "-" and selected_menu in gui.selected_menu_items:
            if gui.selected_menu_items[selected_menu]["quantity"] > 1:
                gui.selected_menu_items[selected_menu]["quantity"] -= 1
            else:
                del gui.selected_menu_items[selected_menu]

            gui.update_menu_listbox()
            gui.update_total_price()

    def update_menu_listbox(gui):
        gui.menu_listbox.delete(0, tk.END)
        for menu_item, details in gui.selected_menu_items.items():
            gui.menu_listbox.insert(tk.END, f"{menu_item} x{details['quantity']}")

    def update_total_price(gui):
        total_price = sum(details["quantity"] * details["price"] for details in gui.selected_menu_items.values())
        gui.total_sales_var.set(total_price)
        gui.total_revenue_var.set(total_price + 50)
        gui.quantity_label.config(text=str(gui.selected_menu_items[gui.menu_var.get()]["quantity"]))

if __name__ == "__main__":
    root = tk.Tk()
    reservation_app = ReservationSystemGUI(root)
    cal = DateEntry(root, width=12, background="darkblue", foreground="white", borderwidth=2)
    cal.pack(padx=10, pady=10)

    root.mainloop()