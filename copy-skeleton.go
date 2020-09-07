package main

import (
	"flag"
	"fmt"
	"io/ioutil"
	"os"
)

type templateFile []string

type dirName struct {
	name string
}

type dirSkeleton struct {
	name string
}

func flagsDir() (*string, *string) {

	flagSkeleton := flag.String("dirskl", "skeleton-dotnet-chart", "Skeleton Directory")
	flagApp := flag.String("dirapp", "Xpinc.Cards.WebhookService.Config", "Application Directory")

	return flagSkeleton, flagApp
}

func checkError(err error) {
	if err != nil {
		fmt.Println(err)
	}
}

func (d *dirName) dirCreate() error {
	err := os.Mkdir(d.name, 0755)
	if err != nil {
		fmt.Println("Directory already exists: ", err)
	}
	return err
}

func fileRead(file string, dir string) []byte {
	byteRead, err := ioutil.ReadFile(dir + file)
	checkError(err)

	return byteRead
}

func fileWrite(dirTemplates string, file string, byteRead []byte) error {
	err := ioutil.WriteFile(dirTemplates+"/"+file, byteRead, 0644)
	checkError(err)

	return err
}

func loopFiles(typeFile templateFile, dir string, dirSkelton string) {
	for i := 0; i < len(typeFile); i++ {
		byteRead := fileRead(typeFile[i], dirSkelton)
		fileWrite(dir, typeFile[i], byteRead)

		fmt.Println("Copying files to: ", dir+"/"+typeFile[i])
	}
}

func main() {

	flagSkeleton, flagApp := flagsDir()
	flag.Parse()

	dirRepo := dirName{name: *flagApp + "/"}
	dirTemplates := dirName{name: *flagApp + "/" + "templates"}

	dirSkeletonRoot := dirSkeleton{name: *flagSkeleton + "/"}
	dirSkeletonTemplate := dirSkeleton{name: *flagSkeleton + "/" + "templates" + "/"}

	files := templateFile{
		"configmap.yaml",
		"deployment.yaml",
		"hpa.yaml",
		"ingress.yaml",
		"NOTES.txt",
		"quota.yaml",
		"role.yaml",
		"rolebinding.yaml",
		"service.yaml",
		"serviceaccount.yaml",
		"xpcryptor-configmap.yaml",
		"xpcryptor-secret.yaml",
	}

	yamlMain := templateFile{
		"Chart.yaml",
		"dsv-values.yaml",
		"hml-values.yaml",
		"prd-values.yaml",
		"README.md",
	}

	filesJSON := templateFile{
		"dsv-appsettings.json",
		"hml-appsettings.json",
		"prd-appsettings.json",
	}

	dirRepo.dirCreate()
	dirTemplates.dirCreate()

	fmt.Println("Creating Repo templates for your app...")
	loopFiles(files, dirTemplates.name, dirSkeletonTemplate.name)

	fmt.Println()
	loopFiles(yamlMain, dirRepo.name, dirSkeletonRoot.name)

	fmt.Println()
	loopFiles(filesJSON, dirRepo.name, dirSkeletonRoot.name)

}
