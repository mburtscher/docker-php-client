<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\TaskSpecContainerSpecPrivileges') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\TaskSpecContainerSpecPrivileges) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\TaskSpecContainerSpecPrivileges();
        if (property_exists($data, 'CredentialSpec')) {
            $object->setCredentialSpec($this->denormalizer->denormalize($data->{'CredentialSpec'}, 'DockerPhpClient\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec', 'json', $context));
        }
        if (property_exists($data, 'SELinuxContext')) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data->{'SELinuxContext'}, 'DockerPhpClient\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCredentialSpec()) {
            $data->{'CredentialSpec'} = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
        }
        if (null !== $object->getSELinuxContext()) {
            $data->{'SELinuxContext'} = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
        }
        return $data;
    }
}