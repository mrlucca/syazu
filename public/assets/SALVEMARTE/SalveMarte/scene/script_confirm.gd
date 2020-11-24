extends Node2D


# Called when the node enters the scene tree for the first time.
func _ready():
	pass # Replace with function body.


func _on_sim_pressed():
	get_tree().change_scene("res://scene/cena_fase.tscn")


func _on_nao_pressed():
	get_tree().change_scene("res://scene/cena_nao.tscn")
