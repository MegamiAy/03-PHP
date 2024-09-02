## manipulação de arquivos em PHP

### checar se existe
`file_exists('arquivo.txt');`

### criar arquvio e mudar conteúdo do arquivo
`$conteudo = 'novo conteúdo';`

`file_put_contents('arquivo.txt', $conteudo);`

### ler conteúdo de arquivo existente

`file_get_contents('arquivo.txt');`

### deletar arquivos

`unlink('arquivo.txt');`

## manipulação de diretórios em PHP

### criar o diretório
`mkdir('pasta');`

### checar se existe
`is_dir('pasta');`

### deleta o diretório
`rmdir('pasta');`

### lista os arquivos e diretórios do caminho
`scandir('pasta');`

### muda o diretório
`chdir`

### abre o manipulador de diretório
`opendir('pasta');`

### fecha o manipulador de diretório
`closedir('pasta');`
