def calculate_pay(hours_worked, is_weekend, is_public_holiday):
    hourly_rate = 15.0 if is_weekend else 12.0
    hourly_rate *= 1.5 if is_public_holiday else 1.0
    total_pay = hours_worked * hourly_rate
    return total_pay

def get_valid_float_input(prompt):
    while True:
        try:
            value = float(input(prompt))
            if value <= 0:
                raise ValueError("Value must be a positive number.")
            return value
        except ValueError:
            print("Invalid input. Please enter a valid positive number.")

def get_valid_yes_no_input(prompt):
    while True:
        response = input(prompt).strip().lower()
        if response in ['yes', 'no']:
            return response == 'yes'
        else:
            print("Invalid input. Please enter 'yes' or 'no'.")

def main():
    hours_worked = get_valid_float_input("Enter the number of hours worked: ")
    is_weekend = get_valid_yes_no_input("Is it a weekend? (yes/no): ")
    is_public_holiday = get_valid_yes_no_input("Is it a public holiday? (yes/no): ")
    
    total_pay = calculate_pay(hours_worked, is_weekend, is_public_holiday)
    print(f"Total pay: ${total_pay:.2f}")

if __name__ == "__main__":
    main()
