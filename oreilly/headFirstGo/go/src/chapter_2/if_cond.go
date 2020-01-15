// pass_fail reports whether a grade is passing or failling.
package main

import (
	"bufio"
	"fmt"
	"log"
	"os"
	"strconv"
	"strings"
)

func main() {
	fmt.Print("Enter a grade: ")
	reader := bufio.NewReader(os.Stdin)
	input, err := reader.ReadString('\n')
	if err != nil {
		log.Fatal(err)
	}

	input = strings.TrimSpace(input)
	grade, err := strconv.ParseFloat(input, 64) // Convert the input to a float64
	if err != nil {
		log.Fatal(err)
	}

	var status string // Declare Variable, so it's in scope for the rest of the function.
	if grade >= 60 {
		status = "passing" // Assign Variable
	} else {
		status = "failing" // Assign Variable
	}
	fmt.Println("A grade of", grade, "is", status)
}
