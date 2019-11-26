#!/usr/bin/env python3
user = {'admin': True, 'active': True, 'name': 'Thiago'}

if user['admin'] == True and user['active'] == True:
    print('ACTIVE - (ADMIN)', user['name'])
elif user['active'] == True:
    print('ACTIVE -', user['name'])
elif user['admin'] == True:
    print("Admin")
else:
    print(user['name'])
