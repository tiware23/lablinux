package main

import "fmt"

func main() {
	for t := 10; t > 0; t-- {
		fmt.Println(t)
	}
	fmt.Println("Bastoff")

	// for x := 1; true; x++ { infinite loop
	// 	fmt.Println(x)
	// }

	for x := 1; false; x++ { // Loop that never runs!
		fmt.Println(x)
	}
}
