# Docker Remove Command
#Check the php version on specific image
    #docker run --rm <image_name_or_id> php -v #Check the php version on specific image
#remove the images
rm-image:
	sudo docker rmi <IMAGE_ID>
#FORCE remove the images, be careful to this command
rm-image-force:
	sudo docker rmi -f <IMAGE_ID>

clear-container:
    sudo docker container prune

clear-images:
    sudo docker image prune
    sudo docker image prune -a #all

clear-network:
    sudo docker network prune

clear-volume:
    sudo docker volume prune

clear-system:
    sudo docker system prune
    sudo docker system prune -a --volumes