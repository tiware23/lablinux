import os
from ftplib import FTP


def backup_of_file():
    print("Doing backup files...")
    file_orig = "cert.key"
    file_backup = path_backup + file_orig
    local_file = open(file_backup, 'wb')
    ftp.retrbinary("RETR " + file_orig, local_file.write)
    local_file.close()


def upload_file():
    filename = 'cert.key'
    upload_files = open(filename, 'rb')
    ftp.storbinary("STOR " + filename, upload_files)
    upload_files.close()

    print("Uploaded the Files")


path_backup = "/home/thiago_cavalcante/git_personal/lablinux/backup/"


try:
    os.mkdir(path_backup,0o775)
except FileExistsError:
    print("The local backup Directory already exists!")

with FTP("localhost") as ftp:
    ftp.login(user="ftp", passwd="ftp")
    backup_of_file()
    upload_file()
    ftp.quit()