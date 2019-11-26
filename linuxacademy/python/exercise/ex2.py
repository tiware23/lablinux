#!/usr/bin/env python3
from math import pi
from os import getenv

accpet_env = int(getenv("DIGITS") or 10)
print("%.*f" % (accpet_env, pi))