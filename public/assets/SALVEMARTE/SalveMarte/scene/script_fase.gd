extends Node2D

func atualizarHUD():
	$HUD/ponto.text = "PONTOS: " + str(ScriptGlobal.qtd_pontos)
	$HUD/vida.value = ScriptGlobal.vida
	
	if (not $AudioStreamPlayer.playing and ScriptGlobal.status_musica==true):
		$AudioStreamPlayer.play()
	elif ($AudioStreamPlayer.playing and ScriptGlobal.status_musica==false):
		$AudioStreamPlayer.stop()
	
	
func _ready():
	$HUD/ColorRect.visible = false
	ScriptGlobal.reset()
		
func _process(delta):
	atualizarHUD()
	if (ScriptGlobal.vida <= 0):
		get_tree().change_scene("res://scene/cena_perdeu.tscn")
	
	if (not $AudioStreamPlayer.playing):
		$AudioStreamPlayer.play()
	

func _on_meteoro_timeout():
	var cena_inimigo = preload("res://scene/cena_inimigo.tscn")
	var objeto_inimigo = cena_inimigo.instance()
	
	objeto_inimigo.global_position.y = 0
	objeto_inimigo.global_position.x = $alienn/alien1.global_position.x
	get_tree().root.add_child(objeto_inimigo)


func _on_Area2D_body_entered(body):
	get_tree().change_scene("res://scene/cena_perdeu.tscn")
