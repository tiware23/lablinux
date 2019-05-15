import os
import zipfile
from ftplib import FTP


def backup_of_file():
    print("*" * 21)
    print("Doing backup files...")
    print("*" * 21)
    with open("lista.txt", "r") as deploy_list_bkp:
        for lists in deploy_list_bkp:

            file_orig = lists.strip()
            file_orig_file = file_orig.split("/")
            print("Backup the follow files: {}".format(file_orig_file[-1]))
            print("#" * len(file_orig_file[-1]))
            print("-" * 21)
            file_backup = path_backup + file_orig_file[-1]

            with open(file_backup, 'wb') as local_file:
                ftp.retrbinary("RETR " + file_orig, local_file.write)

                # with zipfile.ZipFile('backup.zip', 'w') as myzip:
                #     myzip.write(path_backup)


def upload_file():
    print("*" * 18)
    print("Uploading files...")
    print("*" * 18)
    with open("lista.txt", "r") as deploy_list_upload:
        for lists in deploy_list_upload:

            file_name = lists.strip()
            print("Uploading the follow files: {}".format(file_name))

            with open(file_name, 'rb') as upload_files:
                ftp.storbinary("STOR " + file_name, upload_files)

    print("Uploaded the Files")


path_backup = "backup/"


try:
    os.mkdir(path_backup,0o775)
except FileExistsError:
    print("The local backup Directory already exists!")
else:
    with FTP("localhost") as ftp:
        ftp.login(user="ftp", passwd="ftp")
        backup_of_file()
        upload_file()
        ftp.quit()