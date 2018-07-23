package main

import (
	"fmt"
	"time"
)

func main() {

	c1 := make(chan int)
	c2 := make(chan int)

	go func() {
		time.Sleep(time.Second * 1)
		c1 <- 12
	}()
	go func() {
		time.Sleep(time.Second * 5)
		c2 <- 13
	}()
	sum := 0
	for i := 0; i < 2; i++ {
		// Await both of these values
		// simultaneously, printing each one as it arrives.
		select {
		case msg1 := <-c1:
			sum += msg1
		case msg2 := <-c2:
			sum += msg2
		}

		fmt.Println(sum)
	}
    fmt.Println(sum)
}

