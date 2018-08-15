<?php 

$nome = $_POST['name'];
$fone = $_POST['phone'];
$email = $_POST['email'];
$mensagem = $_POST['message'];

$header = "From: ". $nome;

$corpoEmail = '<b>Duvidas de novos alunos - Novos interessados no Curso de Engenharia de Software</b>

                    Nome: '   .$nome.' /n
                    Email:'   .$email.'/n
                    Assunto:' .$mensagem.' /n
                    Telefone:'.$fone.' /n';

                    if(mail("erikzambeli@gmail.com", "Fale Conosco",$corpoemail,$headers)){
 
 
                        echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
                        header("Location: index.html");
                  
                 } else{
                  
                       echo "<script>alert('Erro ao enviar, tente diretamente pelo email ericasouza@utfpr.edu.br');</script>";  
                  
                 }
?>