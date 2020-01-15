package main

import (
	"bufio"
	"fmt"
	"log"
	"math/rand"
	"os"
	"strconv"
	"strings"
	"time"
)

func main() {
	// Generate a random number from 1 to 100, and
	// store it as a target number for the player to guess
	seconds := time.Now().Unix() // get the current date and time, as an integer (timestamp)
	rand.Seed(seconds)
	target := rand.Intn(100) + 1
	fmt.Println("I've chosen a random number between 1 and 100.")
	fmt.Println("Can you guess it?")
	// Prompt the player to guess what the target number is,
	// and store their response.
	reader := bufio.NewReader(os.Stdin)
	// Allow the player to guess up to 10 times. Before
	// each guess, let them know how many guesses they have left

	sucesses := false

	for guesses := 0; guesses < 3; guesses++ {
		fmt.Println("You have", 3-guesses, "guesses left.")

		fmt.Print("Make a guess: ")
		input, err := reader.ReadString('\n')
		if err != nil {
			log.Fatal(err)
		}

		input = strings.TrimSpace(input)
		guess, err := strconv.Atoi(input)

		if err != nil {
			log.Fatal(err)
		}
		// if the player's guess is less than the target
		// number, say, "Oops. Your guess was LOW." if the
		// the player's guess is greater than the target number,
		// say, "Oops. Your guess was HIGH."
		if guess < target {
			fmt.Println("Oops. Your guess was LOW.")
		} else if guess > target {
			fmt.Println("Oops. Your guess was HIGH.")
		} else {
			sucesses = true
			fmt.Println("Good Job! You guessed it!") // If the player's guess is equal to the target number,
			// tell them, "Good Job! You guessed it!"
			// Then stop asking for new guesses.
			break
		}

	}
	if !sucesses {
		fmt.Println("Sorry, you didn't guess my number. It was:", target)
	}
}

// if the player ran out of turns without guessing correctly, say,
// "Sorry. You didn't guess my number. It was: [target]."
