extends KinematicBody2D

var direcaoInimigo 

func _ready():
	$AnimationPlayer.play("parado")

#funcao para verificar o lado que o inimigo deve estar
func verificarlado(body):
	if body.position.x < position.x:
		virarPersonagem(false)
	else:
		virarPersonagem(true)

#funcao virar o inimigo
func virarPersonagem(dir):
	if dir:
		direcaoInimigo = 1
	else:
		direcaoInimigo = -1
	
	#altera direcao
	$Sprite.flip_h = dir
	
func _on_ataque_area_entered(area):
	if(area.name == "Livro"):
		area.queue_free()
		$AnimationPlayer.play("morreu")
		queue_free()
		ScriptGlobal.qtd_pontos = 15	

func _on_dano_body_entered(body):
	if(body.name=="alien1"):
		$AnimationPlayer.play("ataque")
		ScriptGlobal.vida -= 10
		ScriptGlobal.qtd_pontos -= 10
