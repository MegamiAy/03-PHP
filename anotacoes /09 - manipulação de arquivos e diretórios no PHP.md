## manipulação de arquivos em PHP

### chegar se existe
`file_exists('arquivo.txt');`

### criar arquvio e mudar conteúdo do arquivo
`$conteudo = 'novo conteúdo';`

`file_put_contents('arquivo.txt', $conteudo);`

### ler conteúdo de arquivo existente

`file_get_contents('arquivo.txt');`

### deletar arquivos

`unlink('arquivo.txt');`

## manipulação de diretórios em PHP

### muda o diretório
`chdir - `

### muda o diretório raiz
`chroot - `

### abre o manipulador de diretório
`opendir - `

### fecha o manipulador de diretório
`closedir - `

### retornar instancia do diretório
`dir - `

### obter o diretório atual
`getcwb - `

### lista os arquivos e diretórios no caminho especificado
`scandir - `
