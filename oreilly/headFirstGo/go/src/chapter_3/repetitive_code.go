package main

import (
	"fmt"
	"log"
)

func paintNeeded(witdth float64, height float64) (float64, error) {
	if witdth < 0 {
		return 0, fmt.Errorf("a width of %.2f is invalid", witdth)
	}
	if height < 0 {
		return 0, fmt.Errorf("a heigth of %.2f is invalid", height)
	}
	area := witdth * height
	return area / 10.0, nil
}

func main() {
	var total float64
	amount, err := paintNeeded(4.2, 3.0)
	if err != nil {
		log.Fatal(err)
	}
	fmt.Printf("%0.2f liters needed\n", amount)
	total += amount

	amount, err = paintNeeded(5.2, 3.5)
	if err != nil {
		log.Fatal(err)
	}
	fmt.Printf("%0.2f liters needed\n", amount)
	total += amount

	fmt.Printf("Total: %.2f liters \n", total)
	// var width, height, area float64
	// width = 4.2
	// height = 3.0
	// area = width * height
	// fmt.Printf("%.2f liters needed\n", area/10)

	// width = 5.2
	// height = 3.5
	// area = width * height
	// fmt.Printf("%.2f liters needed\n", area/10)

	// fmt.Printf("A float: %f\n", 3.1415)
	// fmt.Printf("A integer: %d\n", 15)
}
