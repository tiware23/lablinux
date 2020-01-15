package greeting

import "fmt"

func Hello() { // The function will be exported (First letter are capitalized)
	fmt.Println("Hello!")
}

func Hi() { // The function will be exported (First letter are capitalized)
	fmt.Println("Hi!")
}
