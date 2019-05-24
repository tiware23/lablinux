import os
import shutil
import argparse
from ftplib import FTP


def print_message_backup():
    print("*" * 21)
    print("Doing backup files...")
    print("*" * 21)


def backup_of_file(ftp):
    print_message_backup()

    with open("lista.txt", "r") as deploy_list_bkp:
        for lists in deploy_list_bkp:
            file_orig = lists.strip()
            print(file_orig)
            file_orig_file = file_orig.split("/")
            print("Backup the follow files: {}".format(file_orig_file[-1]))
            print("#" * len(file_orig_file[-1]))
            print("-" * 21)
            file_backup = path_backup + file_orig_file[-1]

            with open(file_backup, 'wb') as local_file:
                ftp.retrbinary("RETR " + file_orig, local_file.write)


def zip_backup_directory():
    shutil.make_archive("backup", 'zip', path_backup)


def print_message_upload():
    print("Uploading files...")
    print("*" * 18)


def upload_file(ftp):
    print_message_upload()
    with open("lista.txt", "r") as deploy_list_upload:
        for lists in deploy_list_upload:
            file_name = lists.strip()
            print("Uploading the follow files: {}".format(file_name))

            with open(file_name, 'rb') as upload_files:
                ftp.storbinary("STOR " + file_name, upload_files)

    print("Uploaded the Files")


def manager_files():
    try:
        os.mkdir(path_backup, 0o775)
    except FileExistsError:
        print("The local backup Directory already exists!")
    else:
        with FTP(args.host) as ftp:
            ftp.login(user=args.user, passwd=args.password)
            backup_of_file(ftp)
            upload_file(ftp)
            ftp.quit()
            zip_backup_directory()


# Backup Directory
path_backup = "backup/"

# Args to script file
parser = argparse.ArgumentParser()
parser.add_argument("-H", "--host", help="FTP's address")
parser.add_argument("-u", "--user", help="FTP's user")
parser.add_argument("-p", "--password", help="FTP's password")
args = parser.parse_args()

if __name__ == "__main__":
    manager_files()
