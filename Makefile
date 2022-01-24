.PHONY: test
test:
	./vendor/bin/phpunit

mutate:
	XDEBUG_MODE=coverage ./vendor/bin/infection