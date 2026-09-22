<?php

$resposta = (string) readline("É mamífero? (sim/nao)");
if ($resposta === "sim") {
    $resposta = (string) readline("É quadrúpede? (sim/nao)");
    if ($resposta === "sim") {
        $resposta = (string) readline("É carnívoro? (sim/nao)");
        if ($resposta === "sim") {
            echo"Animal Escolhido: Leão\n";
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É herbívoro? (sim/nao)");
            if ($resposta === "sim") {
                echo"Animal Escolhido: Cavalo\n";
            }else{
                echo"Animal não identificado\n";
            }
        }else{
            echo"Animal não identificado\n";
        }
    }elseif ($resposta === "nao") {
        $resposta = (string) readline("É bípede? (sim/nao)");
        if ($resposta === "sim") {
            $resposta = (string) readline("É onívoro? (sim/nao)");
            if ($resposta === "sim") {
                echo"Animal Escolhido: Homem\n";
            }elseif ($resposta === "nao") {
                $resposta = (string) readline("É frutívoro? (sim/nao)");
                if ($resposta === "sim") {
                    echo"Animal Escolhido: Macaco\n";
                }else{
                    echo"Animal não Identificado\n";
                }
            }else{
                echo"Animal não Identificado\n";
            }
        }elseif ($resposta === "nao") {
            $resposta = (string) readline("É voador? (sim/nao)");
            if ($resposta === "sim") {
                echo"Animal Escolhido: Morcego\n";
            }elseif ($resposta === "nao") {
                $resposta = (string) readline("É aquático? (sim/nao)");
                if ($resposta === "sim") {
                    echo"Animal Escolhido: Baleia\n";
                }else{
                    echo"Animal não Identificado";
                }
            }else{
                echo"Animal não Identificado";
            }
        }else{
            echo"Animal não Identificado";
        }
    }else{
        echo"Animal não Identificado";
    }
}elseif ($resposta === "nao") {
    $resposta = (string) readline("É ave? (sim/nao)");
    if ($resposta === "sim") {
        $resposta = (string) readline("É não voadora? (sim/nao)");
        if ($resposta === "sim") {
            $resposta = (string) readline("É tropical? (sim/nao)");
            if ($resposta === "sim") {
                echo"Animal Escolhido: Avestruz\n";
            }elseif ($resposta === "nao") {
                $resposta = (string) readline("É polar? (sim/nao)");
                if ($resposta === "sim") {
                    echo"Animal Escolhido: Pinguim\n";
                }else{
                    echo"Animal não Identificado\n";
                }
            }else{
                echo"Animal não Identificado\n";
            }
        }elseif ($resposta === "nao") {
            $resposta = (string) readline("É nadadora? (sim/nao)");
            if ($resposta === "sim") {
                echo"Animal Escolhido: Pato\n";
            }elseif ($resposta === "nao") {
                $resposta = (string) readline("É de rapina? (sim/nao)");
                if ($resposta === "sim") {
                    echo"Animal Escolhido: Águia\n";
                }else{
                    echo"Animal não Identificado\n";
                }
            }else{
                echo"Animal não Identificado\n";
            }
        }else{
            echo"Animal não identificado\n";
        }
    }elseif ($resposta === "nao") {
        $resposta = (string) readline("É réptil? (sim/nao)");
        if ($resposta === "sim") {
            $resposta = (string) readline("É com casco? (sim/nao)");
            if ($resposta === "sim") {
                echo"Animal Escolhido: Tartaruga\n";
            }elseif ($resposta === "nao") {
                $resposta = (string) readline("É carívoro? (sim/nao)");
                if ($resposta === "sim") {
                    echo"Animal Escolhido: Crocodilo\n";
                }elseif ($resposta === "nao") {
                    $resposta = (string) readline("É sem patas? (sim/nao)");
                    if ($resposta === "sim") {
                        echo"Animal Escolhido: Cobra\n";
                    }else{
                        echo"Animal não identificado\n";
                    }
                }else{
                    echo"Animal não identificado\n";
                }
            }else{
                echo"Animal não identificado\n";
            }
        }else{
            echo"Animal não identificado\n";
        }
    }else{
        echo"Animal não identificado\n";
    }
}else{
    echo"Animal não identificado\n";
}