#!/usr/bin/env python3
import argparse

parser = argparse.ArgumentParser()
parser.add_argument('file_name', help='the file to read')
parser.add_argument('--line_number', '-l', type=int, help='The specify line number')

args = parser.parse_args()

try:
    f = open(args.file_name)
    limit = args.line_number
except FileNotFoundError as err:
    print(f"Error: {err}")
else:
    with open(args.file_name) as f:
        lines = f.readlines()
        lines.reverse()
        if limit == 0:
            print("File is too short")
        else:
            print(lines[-args.line_number])

# import argparse

# parser = argparse.ArgumentParser()
# parser.add_argument('file_name', help='the file to read')
# parser.add_argument('line_number', type=int, help='the line to print from the file')

# args = parser.parse_args()

# try:
#     lines = open(args.file_name, 'r').readlines()
#     line = lines[args.line_number - 1]
# except IndexError:
#     print(f"Error: file '{args.file_name}' doesn't have {args.line_number} lines.")
# except IOError as err:
#     print(f"Error: {err}")
# else:
#     print(line)