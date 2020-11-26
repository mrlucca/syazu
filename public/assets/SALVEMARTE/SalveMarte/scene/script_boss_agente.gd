extends KinematicBody2D

var virar = true
var posicao_inicial 
var posicao_final 
var velo = 0.5

func _ready():
	$AnimationPlayer.play("andando")
	posicao_inicial = $".".position.x
	posicao_final = posicao_inicial + 100
	
	
func _process(delta):
	if(posicao_inicial <= posicao_final and virar):
		$".".position.x += velo
		$Sprite.flip_h = false
		if($".".position.x >= posicao_final):
			virar = false
	
	if($".".position.x >= posicao_inicial and !virar):
		$".".position.x -= velo
		$Sprite.flip_h = true
		if($".".position.x <= posicao_inicial):
			virar = true

func _on_ataque_area_entered(area):
	if(area.name == "Livro"):
		area.queue_free()
		queue_free()
		ScriptGlobal.qtd_pontos = 20

func _on_dano_body_entered(body):
	if(body.name=="alien1"):
		
		$AnimationPlayer.play("ataque")
		ScriptGlobal.vida -= 15
		ScriptGlobal.qtd_pontos -= 10
