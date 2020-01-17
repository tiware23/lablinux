package main

import "fmt"

func main() {
	notes := [7]string{"do", "re", "mi", "fa", "so", "la", "si"}
	// index := 1
	// fmt.Println(index, notes[index])
	// index = 3
	// fmt.Println(index, notes[index])

	// for i := 0; i < len(notes); i++ {
	// 	fmt.Println(i, notes[i])
	// }
	for index, note := range notes {
		fmt.Println(index, note)
	}

	fmt.Println(len(notes))
}
