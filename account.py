class Account:
    def __init__(self,numero, titular, saldo, limite = 1000.0):
        print("Building object... {}".format(self))
        self.__numero = numero
        self.__titular = titular
        self.__saldo = saldo
        self.__limite = limite

    def balance_account(self):
        print("{}'s account balance is ${}".format(self.__titular, self.__saldo))

    def deposit_account(self, value):
        self.__saldo += value

    def withdraw_account(self, value):
        self.__saldo -= value

    def transfer_account(self, value, destination):
        self.withdraw_account(value)
        destination.deposit_account(value)

    # Getters

    def get_balance_account(self):
        return self.__saldo

    def get_customer_name(self):
        return self.__titular

    def get_limit_account(self):
        return self.__limite

    # Setters

    def set_limit_account(self, limite):
        self.__limite = limite
