.PHONY: test
test-all:
	./vendor/bin/phpunit

test-stack:
	./vendor/bin/phpunit test/ADT/StackTest.php

test-queue:
	./vendor/bin/phpunit test/ADT/QueueTest.php

test-int:
	./vendor/bin/phpunit test/Mutation/MyIntTest.php

mutate:
	XDEBUG_MODE=coverage ./vendor/bin/infection