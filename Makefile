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

update:
	composer dump-autoload

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin