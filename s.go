package main

import "fmt"

var tags = make(map[int]interface{})

func main() {
	tags[0] = "aaaa"
	tags[1] = "bbbb"
	tags[2] = 12
	tags[3] = 1.3
	tags[4] = false

	for k, t := range tags {
		fmt.Println(k, t)
	}

	fmt.Println("++++++++++++")
	for k, t := range tags {
		fmt.Println(k, t)
	}
	//delete (tags, 3)

	var keys []int
	for k := range tags {
		keys = append(keys, k)
	}
	fmt.Println("----------")
	for _, k := range keys {
		fmt.Println(tags[k])
	}

	fmt.Println("----------")
	for _, k := range keys {
		fmt.Println(tags[k])
	}

	fmt.Println("----------")
	for _, k := range keys {
		fmt.Println(tags[k])
	}

}

