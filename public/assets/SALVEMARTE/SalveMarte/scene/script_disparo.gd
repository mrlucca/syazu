extends Area2D

var tipo_disparo = "Sprite"
var velocidade = 3
var mov = Vector2.ZERO
# Called when the node enters the scene tree for the first time.
func _ready():
	$Sprite.visible = false
	
	if(tipo_disparo=="Sprite" and ScriptGlobal.status_efeitos_sonoros==true):
		$Sprite.visible = true
		$AudioStreamPlayer.play()
	else:
		$Sprite.visible = false

func _process(delta):
	mov.y = 0
	mov.x = velocidade
	translate(mov)





	

	
