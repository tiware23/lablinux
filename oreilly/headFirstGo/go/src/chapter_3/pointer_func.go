package main

import "fmt"

func createPointer() *float64 {
	var myFloat = 98.5
	return &myFloat
}

func printPointer(myBoolPointer *bool) {
	fmt.Println(*myBoolPointer)
}

func main() {
	var myFloatPointer *float64 = createPointer()
	fmt.Println(*myFloatPointer)

	var myBool bool = true
	printPointer(&myBool) // pass pointer functions as arguments
}
