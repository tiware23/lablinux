#!/usr/bin/env python3
import argparse
import os
from azure.identity import DefaultAzureCredential
from azure.keyvault.secrets import SecretClient

def clear_screen() -> None:
    os.system("cls" if os.name == "nt" else "clear")

def print_secret_properties(secret_name: 'KeyVaultSecret'):
    print("Key vault Secret properties: ")
    print()
    print(f'Secret name: {secret_name.name}\nSecret Value: {secret_name.value}\nTags: {secret_name.properties.tags}')

def set_vault(vault_url: str, vault_key: str, vault_value: str, vault_tags: str):
    clear_screen()
    vault_tags_dict = dict(t.split("=") for t in vault_tags.split(";"))
    credential = DefaultAzureCredential()

    secret_client = SecretClient(vault_url=vault_url, credential=credential)
    secret = secret_client.set_secret(vault_key, vault_value, tags=vault_tags_dict)

    print_secret_properties(secret)

# Args to script file
parser = argparse.ArgumentParser()
parser.add_argument("-u", "--url", help="Vault Address")
parser.add_argument("-k", "--key", help="Key's secret")
parser.add_argument("-v", "--value", help="Value's secret")
parser.add_argument("-t", "--tags", help="Tags secret")

args = parser.parse_args()

if __name__ == "__main__":
    set_vault(args.url, args.key, args.value, args.tags)
