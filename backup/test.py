import tkinter as tk

def show_selected():
    selected_items = [var.get() for var in checkbox_vars]
    print("Selected items:", selected_items)

# Create main window
root = tk.Tk()
root.title("Multi-Checkbox Example")

# Create and place checkboxes
checkbox_vars = []
checkbox_labels = ["Option 1", "Option 2", "Option 3", "Option 4"]

for label_text in checkbox_labels:
    var = tk.IntVar()
    print(var)
    checkbox_vars.append(var)
    checkbox = tk.Checkbutton(root, text=label_text, variable=var)
    checkbox.pack(anchor=tk.W)

# Create and place a button to show selected checkboxes
show_button = tk.Button(root, text="Show Selected", command=show_selected)
show_button.pack()

# Start the main loop
root.mainloop()
