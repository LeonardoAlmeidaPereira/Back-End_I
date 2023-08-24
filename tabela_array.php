<?php 
  $cadastro = [
      ["nome" => "Joao Silva",
        "idade" => 25,
        "email" => "joao.silva@gmail.com",
        "ecivil" => "Solteiro",
        "salario" => 1950,
      ],
      ["nome" => "Rafael Cardoso",
        "idade" => 32,
        "email" => "rafacardoso@gmail.com",
        "ecivil" => "Casado",
        "salario" => 5541,
    ],
    ["nome" => "Gabriela Schidt",
        "idade" => 21,
        "email" => "gabischidt@gmail.com",
        "ecivil" => "Solteira",
        "salario" => 3214,
    ],
    ["nome" => "Roberta Oliveira",
        "idade" => 38,
        "email" => "roberta.oliveira@gmail.com",
        "ecivil" => "Divorciada",
        "salario" => 4258,
    ],
    ["nome" => "Pedro Santos",
        "idade" => 17,
        "email" => "pebolado@gmail.com",
        "ecivil" => "Solteiro",
        "salario" => 2100,
        ]
  ];

  echo '
      <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
        </head>
        <body>
        <table>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
          <th>E-mail</th>
          <th>Estado Civil</th>
          <th>Salário</th>
        </tr>
      ';

  foreach ($cadastro as $item) {
    $row = "<tr>";
    
    foreach ($item as $campo => $valor) {
      $row .= "<td>$valor</td>";
    };
    $row.="</tr>";
    echo $row;
    
}
    echo '</body>
        </html>';
?>