package main

import "fmt"

func main() {

	defer func(){
		fmt.Println("ending ......")
	}()

    switch {
    case false:
            fmt.Println("The integer was <= 4")
            fallthrough
    case true:
            fmt.Println("The integer was <= 5")
            fallthrough
    case false:
            fmt.Println("The integer was <= 6")
            fallthrough
    case true:
            fmt.Println("The integer was <= 7")
    case false:
            fmt.Println("The integer was <= 8")
            fallthrough
    default:
            fmt.Println("default case")
    }
	a := [6]int{1,2,3,4}
	fmt.Println(a)

	for _, v := range a{
		 defer func() { fmt. Println(v) }()
	}

//  这种是闭包的调用方式。
//  The first version prints the value of 'i' in the moment when the closure executes,
//  the second prints the value of 'i' in the moment when the defer statement was executed.	
//	for _, v := range a{
//		 defer func(n int) { fmt. Println(n) }(i)
//	}
}
