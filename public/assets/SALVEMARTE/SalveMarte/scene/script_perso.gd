extends KinematicBody2D


var velocidade = 300
var forca_pulo = -200
var mov = Vector2(0,0)
var atacando = false

var direcao = 1 # 1 é para direita e -1 é para esquerda

func _process(delta):
	
	mov.y += 5
	
	if (Input.is_action_pressed("ui_left")):
		if (direcao == 1):
			scale.x = -1
			direcao = -1
		
		mov.x = -velocidade
		if (is_on_floor()):
			$AnimatedSprite.play("andando")
			
	elif (Input.is_action_pressed("ui_right")):
	
		if (direcao == -1):
			scale.x = -1
			direcao = 1
		
		mov.x = velocidade
		if (is_on_floor()):
			$AnimatedSprite.play("andando")
	else: 
		mov.x = 0
		if (is_on_floor() and not atacando):
			$AnimatedSprite.play("parado")	
	
	if (Input.is_action_just_pressed("ui_up") and is_on_floor()):
		mov.y = forca_pulo
		$AnimatedSprite.play("pulando")
		
		if (ScriptGlobal.status_efeitos_sonoros==true):
			$AudioStreamPlayer.play()
	
	if (Input.is_action_just_pressed("tiro")):		
		var cena_disparo = preload("res://scene/cena_disparo.tscn")
		var objeto_disparo1 = cena_disparo.instance()
		
		objeto_disparo1.global_position = $Position2D.global_position
		get_parent().get_parent().add_child(objeto_disparo1)
		
		atacando = true
	
		$AnimatedSprite.play("atirando")
	
	mov = move_and_slide(mov,Vector2(0,-1))	

func _on_AnimatedSprite_animation_finished():
	atacando = false

