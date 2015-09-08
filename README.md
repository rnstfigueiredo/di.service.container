# git-code.education

    Curso Curso DI_Service_Container - code.education

#### Criar chave publica privada SSH
* ssh-keygen -t rsa -C "Rnst Figueiredo - leoni@SeuDominio.eti.br"
* eval "$(ssh-agent -s)" (verifica o agente ssh)
* ssh-add ~/.ssh/id_rsa (adiciona a key ao meu perfil)
* atheia:git-code.education(master) $ ssh -T git@github.com
* The authenticity of host 'github.com (192.30.252.128)' can't be established.
* RSA key fingerprint is 16:27:ac:a5:76:28:2d:36:63:1b:56:4d:eb:df:a6:48.
* Are you sure you want to continue connecting (yes/no)? yes
* Warning: Permanently added 'github.com,192.30.252.128' (RSA) to the list of known hosts.
* Hi rnstfigueiredo! You've successfully authenticated, but GitHub does not provide shell access.

##### Criando o Ambiente
        mkdir git-code.education
        cd git-code.education/
        git init
        git status

##### Criando Arquivo .md
        echo "# git-code.education" >> README.md

##### Adicionando Arquivo
        git status
        git add README.md

##### Commit local
        $ git commit -m "Meu primeiro Commit"
        [master (root-commit) cb3b06f] Meu primeiro Commit
         1 file changed, 15 insertions(+)
         create mode 100644 README.md

##### Adicionando Repositorio Virtual-Remoto
    git remote add origin https://github.com/rnstfigueiredo/git-code.education.git
    git push -u origin master
