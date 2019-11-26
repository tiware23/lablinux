#!/usr/bin/env python3

import sys

try:
    print(f'Positional argument {sys.argv[1:]}')
    print(f'First argument: {sys.argv[1]}')
except IndexError:
    print("Missing arguments")