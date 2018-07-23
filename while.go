package main

import (
	"fmt"
	"time"
)

func main() {

	var timer = time.NewTicker(100 * time.Millisecond)
	for {
		select {
		case <-timer.C:
			fmt.Println(1)

		}

	}
	fmt.Println("end")
}

