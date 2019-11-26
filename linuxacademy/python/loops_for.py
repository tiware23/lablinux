colors = ['blue', 'green', 'red', 'purple']
for color in colors:
   if color == 'blue':
      continue
   elif color == 'red':
      break
   print(color)

print('*' * 20)
point = (2.1, 3.2, 7.6)
for value in point:
   print(value)

print('*' * 20)
ages = {'kevin': 59, 'bob': 40, 'kayla': 21}
for key in ages:
    print(key)

print('*' * 20)
list_of_points = [(1,2), (2,3), (3,4)]
for x, y in list_of_points:
   print(f"x: {x}, y:{y}")

name = ""
if not name:
    print("Not name given")

# Or condition
first = ""
last = ""
if first or last:
    print("The user has a first or last name")

# And Condition
print('*' * 20)
first = "Keith"
last = ""
if first and last:
    print(f"Full name: {first} {last}")
elif first:
    print(f"Full name: {first}")
elif last:
    print(f"Full name: {last}")
