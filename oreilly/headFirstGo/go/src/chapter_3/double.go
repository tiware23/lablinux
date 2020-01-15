package main

import "fmt"

func double(number int) {
	number *= 2
}

func main() {
	amount := 6
	double(amount)
	fmt.Println(amount)
	fmt.Println(&amount) // ampersand, which is Go's "Address of". Retrive the variable's
	// address
}
