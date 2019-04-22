#!/usr/bin/python3
# Script to extract certificate and key files from PFX file.
# Author: Thiago N Cavalcante

import os
import sys
 
 
def clear_screen():
    os.system("cls" if os.name == "nt" else "clear")
 
def show_help():
    clear_screen()
    print( """
#################################################################
# Usage: extract_pfx.py <certificate.pfx> <certificate_name> :D #  
#################################################################
    """)
 
def extract_file(certificate_pfx=None, certificate_name=None):
    if certificate_pfx != None:
        print("Extracting Cerficate file...")
        os.system("openssl pkcs12 -in {} -nokeys -out {}.crt".format(certificate_pfx, certificate_name))
        print("Extracting Key File")
        os.system("openssl pkcs12 -in {} -nocerts -out {}.key -nodes".format(certificate_pfx, certificate_name))
    else:
        show_help()

try:
    clear_screen()
    extract_file(**{"certificate_pfx": sys.argv[1], "certificate_name": sys.argv[2]})
except IndexError:
    show_help()
