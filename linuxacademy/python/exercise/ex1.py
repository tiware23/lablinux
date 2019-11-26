#!/usr/bin/env python3

def check_message(count=1):
    count = int(input("How many times do you want to repeat this message? "))

    for i in range(1, count + 1):
        print(f"{i} - {message}")

message = input("Give a message to echo: ")
check_message()

# Teacher version:
#!/usr/bin/env python3.6

# message = input("Enter a message: ")
# count = input("Number of repeats [1]: ").strip()

# if count:
#     count = int(count)
# else:
#     count = 1

# def multi_echo(message, count):
#     while count > 0:
#         print(message)
#         count -= 1

# multi_echo(message, count)