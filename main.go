package main

import (
	"fmt"
)

func total(in chan int, out chan int) {
	res := 0
	for iter := range in {
		res += iter
	}
	out <- res //send back the result
}

func main() {
	ch := make(chan int)
	rch := make(chan int)

	go total(ch, rch)
	ch <- 1
	ch <- 2
	ch <- 3
	ch <- 4
	close(ch)       // this will end the loop in the total function
	result := <-rch // wait for total to give the result
	fmt.Println("Total is ", result)

}

