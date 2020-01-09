package main

import (
	"fmt"
	"log"
	"os"
	"strings"
)

func main() {
	fileInfo, err := os.Stat("my.txt")
	if err != nil {
		log.Fatal(err)
	}
	fmt.Println(fileInfo.Size())
	s := "\t Formely surronded by space \n"
	fmt.Println(strings.TrimSpace(s)) // Strings package has a Function called Trimspace
} // Removed all whitespace characters(newlines, tabs and relugas spaces)
