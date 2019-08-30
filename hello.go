package main

import (
	"fmt"
	"net/http"
	"os"
	"time"
)

const monitoramento = 3
const delay = 3

func main() {
	exibeIntroducao()
	for {
		exibeMenu()

		comando := leComando()

		switch comando {
		case 1:
			iniciarMonitoramento()
		case 2:
			fmt.Println("Exibindo Logs...")
		case 0:
			fmt.Println("Saindo do programa...")
			os.Exit(0)
		default:
			fmt.Println("Não conheço este comando")
			os.Exit(-1)
		}
	}
}

func exibeIntroducao() {
	nome := "Douglas"
	versao := 1.1
	fmt.Println("Olá, sr(a).", nome)
	fmt.Println("Este programa está na versão", versao)
}

func exibeMenu() {
	fmt.Println("1- Iniciar Monitoramento")
	fmt.Println("2- Exibir Logs")
	fmt.Println("0- Sair do Programa")
	fmt.Println("")
}

func leComando() int {
	var comandoLido int
	fmt.Scan(&comandoLido)
	fmt.Println("O comando escolhido foi:", comandoLido)

	return comandoLido
}

func iniciarMonitoramento() {
	fmt.Println("Monitorando...")
	//Array in GO
	sites := []string{"https://random-status-code.herokuapp.com", "https://www.netshoes.com.br", "https://www.zattini.com.br"}
	// A common for
	// for i := 0; i < len(sites); i++ {
	// 	fmt.Println(sites[i])
	// }

	for i := 0; i < monitoramento; i++ {
		for _, site := range sites {
			fmt.Println("Monitorando site:", site)
			testSite(site)
		}
		fmt.Println("")
		time.Sleep(delay * time.Second)
	}

	fmt.Println("")
}

func testSite(site string) {

	resp, _ := http.Get(site)

	if resp.StatusCode == 200 || resp.StatusCode == 201 {
		fmt.Println("Site:", site, "foi carregado com sucesso!", "Status code:", resp.StatusCode)
	} else {
		fmt.Println("Site:", site, "está com problemas. Status code:", resp.StatusCode)
	}
}

// Array and Slice with len and cap methods
// func exibeNomes() {
// 	nomes := []string{"Thiago", "Kats", "Kare"}
// 	fmt.Println(len(nomes))
// 	fmt.Println("Cap:", cap(nomes))

// 	nomes = append(nomes, "Kelly")
// 	fmt.Println(len(nomes))
// 	fmt.Println("Cap:", cap(nomes))
// }

// return 2 values
// func retornaIdadeENome() (string, int) {
// 	nome := "Thiago"
// 	idade := 30

// 	return nome, idade
// }

