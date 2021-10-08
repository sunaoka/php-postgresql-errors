SOURCE := https://raw.githubusercontent.com/postgres/postgres/master/src/backend/utils/errcodes.txt
TARGET := $(CURDIR)/src/PostgresError.php
GENERATOR := php $(CURDIR)/tools/generator.php

all: clean $(TARGET)

$(TARGET):
	curl -s $(SOURCE) | $(GENERATOR) > $@

clean:
	-$(RM) $(TARGET)

.PHONY: all clean
