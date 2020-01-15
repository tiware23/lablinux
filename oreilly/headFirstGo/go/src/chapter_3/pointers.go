package main

import (
	"fmt"
)

func main() {
	// var myInt int
	// var myIntPointer *int // Declare variable that holds a pointer to an int
	// myIntPointer = &myInt // assign a pointer to the variable
	// fmt.Println(myIntPointer)
	// fmt.Println(&myInt)
	// // fmt.Println(reflect.TypeOf(&myInt)) // types of pointers *int

	// var myBool bool
	// myBoolPointer := &myBool
	// fmt.Println(myBoolPointer)

	myInt := 4
	fmt.Println(myInt)
	fmt.Println(&myInt)
	myIntPointer := &myInt
	*myIntPointer = 8
	fmt.Println(*myIntPointer)
	fmt.Println(myInt)

	myFloat := 98.0
	myFloatPointer := &myFloat
	fmt.Println(myFloatPointer)
	fmt.Println(*myFloatPointer)
}
