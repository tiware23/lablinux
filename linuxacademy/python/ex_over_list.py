#!/usr/bin/env python3
users = [
    {'admin': True, 'active': True, 'name': 'Thiago'},
    {'admin': False, 'active': True, 'name': 'Kare'},
    {'admin': True, 'active': False, 'name': 'Kelly'},
    {'admin': False, 'active': False, 'name': 'Flavia'},
    {'admin': True, 'active': True, 'name': 'Mayra'},
    {'admin': True, 'active': False, 'name': 'Marcela'}
]

count = 1

for user in users:

    if user['admin'] == True and user['active'] == True:
        print(f"{count} - ", 'ACTIVE - (ADMIN)', user['name'])
    elif user['active'] == True:
        print(f"{count} - ", 'ACTIVE -', user['name'])
    elif user['admin'] == True:
        print(f"{count} - ", "(ADMIN)", user['name'])
    else:
        print(f"{count} - ", user['name'])

    count += 1