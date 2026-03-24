install:
	composer install
	@read -p "Do you want to clean after install? (y/N) " confirm; \
	if [ "$$confirm" = "y" ] || [ "$$confirm" = "Y" ]; then \
		clear; \
	else \
		echo "Skipping clean..."; \
	fi

validate:
	composer validate

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin