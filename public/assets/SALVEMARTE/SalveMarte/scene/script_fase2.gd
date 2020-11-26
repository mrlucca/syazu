extends Area2D


func _ready():
	pass # Replace with function body.

func _on_fase2_body_entered(body):
	if(body.name == "alien1"):
		get_tree().change_scene("res://scene/cena+fase2.tscn")
