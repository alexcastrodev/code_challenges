require 'test/unit'

def reverseString(text)
    text.reverse()
end


def reverseStringSplitted(text)
    result = []
    text.split('').each {
        |string| result.unshift(string)
    }

    result.join
end


class TestString < Test::Unit::TestCase
    def test_reverse_string_native
        result = 'ynapmoc'
        assert_equal result, reverseString('company')
    end

    def test_reverse_string_splitted
        result = 'ynapmoc'
        assert_equal result, reverseStringSplitted('company')
    end
end
