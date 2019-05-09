import os
import fnmatch
import shutil
from ftplib import FTP

def backup_of_file():
    file_orig = 'cert.key'
    local_file = open(file_orig, 'w')
    ftp.retrlines('RETR ' + file_orig, local_file.write)
    
    list_of_Files = os.listdir('.')
    for files in list_of_Files:
        if fnmatch.fnmatch(files, file_orig):
            try:
                shutil.move(files, path)
            except shutil.Error:
               print("Download has been completed!") 
    
def upload_file():
    filename = 'cert.key'
    ftp.storbinary('STOR '+filename, open(filename, 'rb'))
    print("Uploaded the Files")

path = "/home/thiago_cavalcante/Documents/backup"

try:
    os.mkdir(path,0o775)
except FileExistsError:
    print("The Backup already exists!")

with FTP("localhost") as ftp:
    ftp.login(user="ftp", passwd="ftp")
    backup_of_file()
    upload_file()
    ftp.quit()
